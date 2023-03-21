<?php

/**
 * An invoice class which do these things -
 *Initiate some values like, amount, customerID and customerName.
 *Send Email to Customer Email Address
 *Print Invoice 
 *So, look at this a single class which is 
 *responsible for three tasks, 1) Initialize data, 2) Send Email, 
 *3) Print Invoice. This just breaks the Single responsibility principle.
 */

class Invoices
{
    public  $amount;
    public  $customerID;
    public  $customerName;
    public  $customerEmail;

    public function sendEmailToCustomer()
    {
    }
    public function  printInvoice()
    {
    }
}

// To make Class Should maintain single responsibility 
// Then easily can change
class Invoice
{
    public  $amount;
    public  $customerID;
    public  $customerName;
    public  $customerEmail;
}

class SendInvoiceEmail extends Invoices
{
    public function sendEmailToCustomer()
    {
    }
}

class PrintInvoice extends Invoices
{
    public function printInvoice()
    {
    }
}

echo 'Php programming';
