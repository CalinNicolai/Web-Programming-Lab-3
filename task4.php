<?php
////определение ассоциативного массива транзакций
//$transactions = [
//     [
//         "transaction_id" => 1, // id
//         "transaction_date" => "2019-01-01", // дата
//         "transaction_amount" => 100.00, // сумма транзакции
//         "transaction_description" => "Payment for groceries", // описание
//         "merchant_name" => "SuperMart", // название организации
//     ],
//     [
//         "transaction_id" => 2,
//         "transaction_date" => "2020-02-15",
//         "transaction_amount" => 75.50,
//         "transaction_description" => "Dinner with friends",
//         "merchant_name" => "Local Restaurant",
//     ],
//     [
//            "transaction_id" => 3,
//            "transaction_date" => "2021-03-20",
//            "transaction_amount" => 50.25,
//            "transaction_description" => "Books purchase",
//            "merchant_name" => "Bookstore",
//    ],
//    [
//            "transaction_id" => 4,
//            "transaction_date" => "2021-04-10",
//            "transaction_amount" => 120.00,
//            "transaction_description" => "Clothes shopping",
//            "merchant_name" => "Fashion Store",
//    ],
//    [
//            "transaction_id" => 5,
//            "transaction_date" => "2022-05-05",
//            "transaction_amount" => 200.50,
//            "transaction_description" => "Electronics purchase",
//            "merchant_name" => "Tech Shop",
//    ]
//];
//


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


function calculateTotalAmount(Transaction $transactions){
    if (empty($transactions)) return 0;
    $total = 0;
    foreach ($transactions as $transaction ){
        $total+=$transaction->amount;
    }
    return $total;
}

function calculateAverage($transactions){
    return calculateTotalAmount($transactions)/count($transactions);
}

function mapTransactionDescriptions($transactions):array{
    return array_map(function ($transactions){
        return $transactions->$description;
    }, $transactions);
}
?>
<table border="1" style="margin: 0 auto">
 <tr style="background-color: #a6a6a6; color: #252525">
    <th colspan="5">Транзакции</th>
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
