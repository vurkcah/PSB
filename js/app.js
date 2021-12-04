const headElem = document.getElementById("head");
const buttonsElem = document.getElementById("buttons");
const pagesElem = document.getElementById("pages");
const bodyElem = document.getElementById("myimage");

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
	new Result("Спасибо за прохождение опроса! Мы постараемся стать лучше :(", 0),
	new Result("Спасибо за прохождение опроса! Ваше мнение помогает нам стать лучше!", 8),
	new Result("Спасибо за прохождение опроса! Мы рады, что смогли вам понравиться :)", 16),
	new Result("Спасибо за прохождение опроса! Мы рады, что вы так высоко оцениваете нашу компанию!", 25)
];

//Массив с вопросами
const questions = 
[
	new Question("Насколько вы удовлетворены процессом своей адаптации в ПСБ? (1 — совсем не удовлетворен(-а); 5 — полностью удовлетворен(-а))", 
	[
		new Answer("1", 1),
		new Answer("2", 2),
		new Answer("3", 3),
		new Answer("4", 4),
		new Answer("5", 5)
	]),

	new Question("Как быстро вам удалось выйти на эффективный уровень работы? (1 — еще не вышел(-ла) на требуемый уровень эффективности; 5 — почти сразу)", 
	[
		new Answer("1", 1),
		new Answer("2", 2),
		new Answer("3", 3),
		new Answer("4", 4),
		new Answer("5", 5)
	]),

	new Question("Насколько вам удалось освоиться в коллективе? (1 — еще не освоился(-ась); 5 — полностью освоился(-ась))", 
	[
		new Answer("1", 1),
		new Answer("2", 2),
		new Answer("3", 3),
		new Answer("4", 4),
		new Answer("5", 5)
	]),

	new Question("Насколько вам удалось адаптироваться к корпоративной культуре ПСБ? (1 — еще не адаптировался(-ась); 5 — полностью адаптировался(-ась))", 
	[
		new Answer("1", 1),
		new Answer("2", 2),
		new Answer("3", 3),
		new Answer("4", 4),
		new Answer("5", 5)
	]),

	new Question("Оказался ли вам удобен процесс обучения? (1 — обучение крайне неудобное, 5 — всё понравилось, обучение удобное)", 
	[
		new Answer("1", 1),
		new Answer("2", 2),
		new Answer("3", 3),
		new Answer("4", 4),
		new Answer("5", 5)
	]),

	new Question("Как вы оцениваете условия труда? (1 — крайне негативно, 5 — полностью положительно)", 
	[
		new Answer("1", 1),
		new Answer("2", 2),
		new Answer("3", 3),
		new Answer("4", 4),
		new Answer("5", 5)
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

		pagesElem.innerHTML = "Общая оценка: " + quiz.score + "/30";
		if(quiz.score > 1){
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