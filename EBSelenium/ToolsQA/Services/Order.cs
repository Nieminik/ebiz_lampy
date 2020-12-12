using OpenQA.Selenium;

namespace ToolsQA
{
    class Order
    {
        private readonly string cartUrl = "https://dniemiro.dev/index.php?controller=cart&action=show";


        private readonly IWebDriver webDriver;
        public Order(IWebDriver webDriver)
        {
            this.webDriver = webDriver;
        }

        public void Process(Purchaser purchaser)
        {
            webDriver.Navigate().GoToUrl(cartUrl);
            FillAddress(purchaser);
            SelectCarrier();
            SelectPayment();

           
            FinalizeOrder();
        }

        private void FillAddress(Purchaser purchaser)
        {
            if(webDriver.Url != cartUrl)
            {
                webDriver.Navigate().GoToUrl(cartUrl);
            }
            //GoToOrderRealisation
            webDriver.FindElement(By.XPath(@"//a[@class='btn btn-primary']")).Click();

            webDriver.FindElement(By.Name("address1")).SendKeys(purchaser.Address);
            webDriver.FindElement(By.Name("postcode")).SendKeys(purchaser.PostalCode);
            webDriver.FindElement(By.Name("city")).SendKeys(purchaser.City);
            this.SubmitChanges();
        }

        private void SelectPayment()
        {
            webDriver.FindElement(By.XPath("//input[@id='payment-option-2']")).Click();
            this.SubmitChanges();
        }

        private void SelectCarrier()
        {
            webDriver.FindElement(By.XPath("//input[@id='delivery_option_6']")).Click();
            this.SubmitChanges();
        }
       
        private void FinalizeOrder()
        {
            webDriver.FindElement(By.XPath("//input[@id='conditions_to_approve[terms-and-conditions]']")).Click();
            webDriver.FindElement(By.XPath("//button[contains(text(),'Zamówienie z obowiązkiem zapłaty')]")).Click();

            webDriver.FindElement(By.XPath("/html[1]/body[1]/main[1]/header[1]/nav[1]/div[1]/div[1]/div[1]/div[2]/div[1]/div[1]/a[2]/span[1]")).Click();

            //TODO TU MOZE BYC BLAD
            webDriver.FindElement(By.XPath("//a[@id='history-link']")).Click();
        }

        private void SubmitChanges () => webDriver.FindElement(By.XPath("//button[@type='submit'][contains(text(),'Dalej')]")).Click();
    }
}
