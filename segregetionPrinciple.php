<?php
interface Paymable
{
    public function initiatePayments();
    public function getPayment();
}

//Loanable section
interface LoanPayable
{
    public function getLoanHistory();
    public function printLoanPayments();
}

class BankPayment implements Paymable
{
    public function initiatePayments()
    {
        // Do initialization
        echo 'hello';
    }

    public function getPayment()
    {
        // Make Payments Stuff
    }
}

//loan payment
class LoanPayment implements LoanPayable
{
    // Ok for this class
    public function getLoanHistory()
    {
    }
    // Ok for this class
    public function printLoanPayments()
    {
    }
}

$Obj = new BankPayment();
$Obj->initiatePayments();
