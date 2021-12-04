const headElem = document.getElementById("head");
const buttonsElem = document.getElementById("buttons");
const pagesElem = document.getElementById("pages");
const bodyElem = document.getElementById("myimg");

//Класс, который представляет сам тест
class Quiz
{
	constructor(type, questions, results)
	{
		//Тип теста: 1 - классический тест с правильными ответами, 2 - тест без правильных ответов
		this.type = type;

		//Массив с вопросами
		this.questions = questions;

		//Массив с возможными результатами
		this.results = results;

		//Количество набранных очков
		this.score = 0;

		//Номер результата из массива
		this.result = 0;

		//Номер текущего вопроса
		this.current = 0;
	}

	Click(index)
	{
		//Добавляем очки
		let value = this.questions[this.current].Click(index);
		this.score += value;

		let correct = -1;

		//Если было добавлено хотя одно очко, то считаем, что ответ верный
		if(value >= 1)
		{
			correct = index;
		}
		else
		{
			//Иначе ищем, какой ответ может быть правильным
			for(let i = 0; i < this.questions[this.current].answers.length; i++)
			{
				if(this.questions[this.current].answers[i].value >= 1)
				{
					correct = i;
					break;
				}
			}
		}

		this.Next();

		return correct;
	}

	//Переход к следующему вопросу
	Next()
	{
		this.current++;
		
		if(this.current >= this.questions.length) 
		{
			this.End();
		}
	}

	//Если вопросы кончились, этот метод проверит, какой результат получил пользователь
	End()
	{
		for(let i = 0; i < this.results.length; i++)
		{
			if(this.results[i].Check(this.score))
			{
				this.result = i;
			}
		}
	}
} 

//Класс, представляющий вопрос
class Question 
{
	constructor(text, answers)
	{
		this.text = text; 
		this.answers = answers; 
	}

	Click(index) 
	{
		return this.answers[index].value; 
	}
}

//Класс, представляющий ответ
class Answer 
{
	constructor(text, value) 
	{
		this.text = text; 
		this.value = value; 
	}
}

//Класс, представляющий результат
class Result 
{
	constructor(text, value)
	{
		this.text = text;
		this.value = value;
	}

	//Этот метод проверяет, достаточно ли очков набрал пользователь
	Check(value)
	{
		if(this.value <= value)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}

//Массив с результатами
const results = 
[
	new Result("К сожалению, вы провалили тестирование :(", 0),
	new Result("Неплохо, но есть к чему стремиться!", 2),
	new Result("Тест пройден на твёрдую четвёрку!", 4),
	new Result("Вы отлично проявили себя в изучении материала! Продолжайте в том же духе :)", 5)
];

//Массив с вопросами
const questions = 
[
	new Question("Что из приведённого ниже является исключительной особенностью нашего банка?", 
	[
		new Answer("Кредитование юридических лиц", 0),
		new Answer("Выпуск карты с уникальным дизайном на усмотрение держателя", 1),
		new Answer("Кэшбэк при оплате нашими картами", 0),
		new Answer("Ничего из вышеперечисленного", 0)
	]),

	new Question("Уникальным преимуществом для сотрудников нашего банка является...", 
	[
		new Answer("Бесплатная премиальная карта c бесконтактной оплатой и кэшбэком 2%", 1),
		new Answer("Выдача бесплатных путёвок на курорты России", 0),
		new Answer("Возможность перечисления з/п на карту другого банка", 0),
		new Answer("Ничего из вышеперечисленного", 0)
	]),

	new Question("Выплата процентов по вкладу в ПСБ осуществляется...", 
	[
		new Answer("В начале срока", 0),
		new Answer("Через месяц после открытия вклада", 0),
		new Answer("В конце срока", 1),
		new Answer("Никогда", 0)
	]),

	new Question("Сколько видов кредитных карт предлагает ПСБ клиенту?", 
	[
		new Answer("0", 0),
		new Answer("1", 0),
		new Answer("2", 1),
		new Answer("3", 0)
	]),

	new Question("Какие основные требования выдвигает ПСБ своим сотрудникам?", 
	[
		new Answer("Наличие среднего образования", 0),
		new Answer("Знание английского и немецкого языков", 0),
		new Answer("Выносливость и твёрдый характер", 0),
		new Answer("Пунктуальность и вежливость", 1)
	]),
];

//Сам тест
const quiz = new Quiz(1, questions, results);

Update();

//Обновление теста
function Update()
{
	//Проверяем, есть ли ещё вопросы
	if(quiz.current < quiz.questions.length) 
	{
		//Если есть, меняем вопрос в заголовке
		headElem.innerHTML = quiz.questions[quiz.current].text;

		//Удаляем старые варианты ответов
		buttonsElem.innerHTML = "";

		//Создаём кнопки для новых вариантов ответов
		for(let i = 0; i < quiz.questions[quiz.current].answers.length; i++)
		{
			let btn = document.createElement("button");
			btn.className = "button";

			btn.innerHTML = quiz.questions[quiz.current].answers[i].text;

			btn.setAttribute("index", i);

			buttonsElem.appendChild(btn);
		}
		
		//Выводим номер текущего вопроса
		pagesElem.innerHTML = "Прогресс: " + (quiz.current + 1) + "/" + quiz.questions.length;

		//Вызываем функцию, которая прикрепит события к новым кнопкам
		Init();
	}
	else
	{
		//Если это конец, то выводим результат
		buttonsElem.innerHTML = "";
		headElem.innerHTML = quiz.results[quiz.result].text;

		pagesElem.innerHTML = "Верных ответов: " + quiz.score + "/5";
		if(quiz.score == 5){
			bodyElem.classList.add('active');
			setTimeout(() => bodyElem.classList.remove('active'), 5000);
		}
	}
}

function Init()
{
	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	for(let i = 0; i < btns.length; i++)
	{
		//Прикрепляем событие для каждой отдельной кнопки
		//При нажатии на кнопку будет вызываться функция Click()
		btns[i].addEventListener("click", function (e) { Click(e.target.getAttribute("index")); });
	}
}

function Click(index) 
{
	//Получаем номер правильного ответа
	let correct = quiz.Click(index);

	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	//Делаем кнопки серыми
	for(let i = 0; i < btns.length; i++)
	{
		btns[i].className = "button button_passive";
	}

	//Если это тест с правильными ответами, то мы подсвечиваем правильный ответ зелёным, а неправильный - красным
	if(quiz.type == 1)
	{
		if(correct >= 0)
		{
			btns[correct].className = "button button_correct";
		}

		if(index != correct) 
		{
			btns[index].className = "button button_wrong";
		} 
	}
	else
	{
		//Иначе просто подсвечиваем зелёным ответ пользователя
		btns[index].className = "button button_correct";
	}

	//Ждём секунду и обновляем тест
	setTimeout(Update, 1000);
}