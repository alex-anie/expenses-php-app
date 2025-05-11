<?php
    include "expenses.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Expense App</title>
    <link rel="stylesheet" href="./css/main.css" />
</head>
<body>
    <main class="web-root">
        <!-- Sorting Section -->
        <section>

        </section>

        <!-- Heading -->
        <section class="heading-wrapper">
            <!-- <h1 class="heading">Dummy Company Expense Data</h1> -->
        </section>

        <!-- Table Content -->
        <article class="expense-table-container">
            <section class="expense-table-wrapper">
                <table class="expense-table">
                    <caption>
                        📋 Dummy Company Expense Data
                    </caption>
                            <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Amount(USD)</th>
                            <th>Payment Method</th>
                            <th>Department</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach($expense as $id => $data){
                            echo '
                                    <tr>
                                        <td>'.$id.'</td>
                                        <td>'.$data['date'].'</td>
                                        <td>'.$data['category'].'</td>
                                        <td>'.$data['description'].'</td>
                                        <td>$'.$data['amount'].'</td>
                                        <td>'.$data['payment_method'].'</td>
                                        <td>'.$data['department'].'</td>
                                    </tr>
                            ';
                        }
                    ?>
                </tbody>
                </table>
            </section>
        </article>
    </main>
</body>
</html>