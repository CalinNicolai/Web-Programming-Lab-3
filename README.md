# Отчет по третьей лабораторной работе

1. [Инструкции по запуску проекта](#1-инструкции-по-запуску-проекта).
2. [Описание проекта](#2-описание-проекта).
3. [Краткая документация к проекту](#3-краткая-документация-к-проекту).
4. [Примеры использования проекта с приложением скриншотов или фрагментов кода](#4-пример-использования-проекта--с-приложением-скриншотов-).
4. [Задания](#5-задания).

## 1. Инструкции по запуску проекта

Данные инструкции действительны при использовании PhpStorm, в ином случае, воспользуйтесь приведенной ссылкой:
[запуск проекта с gitHub](https://www.youtube.com/watch?v=6N6JFynR0gM)

1. Клонируйте репозиторий:
   ```bash
   https://github.com/CalinNicolai/Web-Programming-Lab-3.git
2. Запустите проект:
   <!-- Если у вас есть веб-сервер (например, Apache или Nginx), настройте его так, чтобы корневой каталог указывал на
   каталог вашего проекта.  
   Если у вас нет веб-сервера, вы можете использовать встроенный сервер PHP для тестирования: -->
   ```bash 
   php -S localhost:8000 task1.php

## 2. Описание проекта

В данной лабораторной работе были изучены циклы, массивы, функции и классы внутри языка PHP

## 3. Краткая документация к проекту

#### Таблица, отображающая график работы докторов:

```PHP
class Transaction {
    public $id;
    public $date;
    public $amount;
    public $description;
    public $merchant;

    public function __construct($id = null, $date = null, $amount = null, $description = null, $merchant = null) {
        $this->id = $id ?? 0;
        $this->date = $date ?? date('Y-m-d');
        $this->amount = $amount ?? 0.00;
        $this->description = $description ?? 'Empty';
        $this->merchant = $merchant ?? 'Empty';
    }

    public function showTransaction(){
        ?>
            <tr>
                <td><?php echo $this->id; ?></td>
                <td><?php echo $this->date; ?></td>
                <td><?php echo $this->amount; ?></td>
                <td><?php echo $this->description; ?></td>
                <td><?php echo $this->merchant; ?></td>
            </tr>
        <?php
    }
}

$transactions = [
    new Transaction(1, '2022-01-01', 100.00, 'Payment for groceries', 'SuperMart'),
    new Transaction(2, '2022-01-05', 50.00, 'Gas bill payment', 'Gas Company'),
    new Transaction(3, '2022-01-10', 75.50, 'Dinner with friends', 'Local Restaurant'),
    new Transaction(4, '2022-02-15', 120.00, 'Clothes shopping', 'Fashion Store'),
    new Transaction(5, '2022-03-20', 200.25, 'Electronics purchase', 'Tech Shop'),
    new Transaction(6, '2022-04-10', 150.00, 'Groceries', 'SuperMart')
];
?>
<table border="1" style="margin: 0 auto">
 <tr style="background-color: #a6a6a6; color: #252525">
    <th colspan="5">Оценки студентов</th>
 </tr>
 <tr style="background-color: #a6a6a6; color: #252525">
    <th>ID</th>
    <th>Дата</th>
    <th>Сумма транзакции</th>
     <th>Описание транзакции</th>
    <th>Название организации</th>
 </tr>
 <?php
 foreach ($transactions as $transaction) {
    $transaction->showTransaction();
}

```

#### Определение функции для расчета общей суммы всех транзакций

```php
function calculateTotalAmount($transactions){
    if (empty($transactions)) return 0;
    $total = 0;
    foreach ($transactions as $transaction ){
        $total+=$transaction->$amount;
    }
    return $total;
}
```

#### Определение функции которая возвращает новый массив, содержащий только описания транзакций.

```php
function mapTransactionDescriptions($transactions):array{
    return array_map(function ($transactions){
        return $transactions->$descriptrion;
    }, $transactions);
}
```

#### Определение функции для расчета среднего арифметического всех транзакций

```php
function calculateAverage($transactions){
    return calculateTotalAmount($transactions)/count($transactions);
}
```

## 4. Пример использования проекта (с приложением скриншотов)

![Пример работы программы](/img.png)

## 5. Задания

### №1 Цикл FOR `task1.php`

#### 1. Создайте файл с содержимым:

   ```php
    $a = 0;
    $b = 0;
    for ($i = 0; $i <= 5; $i++) {
        $a += 10;
        $b += 5;
    }
    echo "<br />Конец цикла, и значение a = " . $a . ", а значение b = " . $b;
   ```

#### 2. Внимательно проанализируйте синтаксис “FOR”.

#### 3. Поменяйте скрипт так, чтобы, выводились, дополнительно, и все промежуточные значения для a и b.

### №2 Цикл WHILE `task2.php`

#### Напишите код задания №1 с помощью цикла while

### №3  Определение массива `task3.php`

#### 1. Определение пустой массив $arr.

#### 2. Напишите программу, которая будет генерировать массив случайных чисел от 1 до 100 с помощью цикла for или while.

#### 3. Выведите полученный массив на экран.

### №4 `task4.php`

#### 1. Определите следующий .php файл

#### 2. Выведите на экран данные о транзакциях

#### 3. Добавьте данные еще для 2-3 транзакций ассоциативный в массив

#### 4. Определение 3 пользовательские функции и выведите их значение на экран

4.1. Функция calculateTotalAmount() рассчитывает общую сумму всех
транзакций.

4.2. Функция calculateAverage() рассчитывает среднее арифметическое
всех транзакций

4.3. Функция mapTransactionDescriptions() возвращает новый массив,
содержащий только описания транзакций.
Примечание: для удобства можете использовать функции array_map(),
array_reduce().

** Дополнительное задание (Данное задание не является оцениваемым, а
помогает вам более подробно погрузиться в изучение PHP).

1. Создайте класс Transaction с полями, указанными выше
2. Создайте в классе конструктор по умолчанию
3. Вместо массива в пункте 1 определите массив из объектов класса.

### №5 Работа с файловой системой `task5.php`

#### 1. Создайте директорию "image", в которой сохраните не менее 20-30изображений с расширением .jpg. Затем создайте файл .php, в котором определите веб-страницу с хедером, меню, контентом и футером. 
