 /**
 A Class done in one time is Open for extends and Close for modification.
 That means - We'll make a class fixed for doing something
 and if there needs any future changes,
 don't write code on the class rather than just extend it.
 */
 <?php
    class Payment
    {
        //initialPayment
        public function initialPayment()
        {
        }
        public function getPaymentForPaypal()
        {
            // Do Paypal type works
        }
        public function getPaymentForStrip()
        {
            // Do Stripe type works
        }
    }

    /**
     * Open-close principle design class
     */

    interface Payable
    {
        /** 
         * Get Payment For Any Method
         */
        public function getPayment();
    }

    class PaypalPayment implements Payable
    {
        public function getPayment()
        {
            //Do works for paypal
        }
    }
    class StripePayment implements Payable
    {
        public function getPayment()
        {
            //Do works for stripe
        }
    }
