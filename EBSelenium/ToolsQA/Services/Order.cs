using OpenQA.Selenium;
using OpenQA.Selenium.Interactions;

namespace ToolsQA
{
    class Order
    {
        private readonly string cartUrl = "https://172.20.83.89/index.php?controller=cart&action=show";


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
            webDriver.FindElement(By.XPath("//footer[@class='form-footer clearfix']//button[@type='submit'][contains(text(),'Dalej')]")).Click();
        }

        private void SelectCarrier()
        {
            webDriver.FindElement(By.XPath("//input[@id='delivery_option_6']")).Click();
            webDriver.FindElement(By.XPath("//form[@id='js-delivery']//button[@type='submit'][contains(text(),'Dalej')]")).Click();
        }

        private void SelectPayment()
        {
            webDriver.FindElement(By.XPath("//input[@id='payment-option-2']")).Click();
        }
        private void FinalizeOrder()
        {
            webDriver.FindElement(By.XPath("//input[@id='conditions_to_approve[terms-and-conditions]']")).Click();
            webDriver.FindElement(By.XPath("//button[contains(text(),'Zamówienie z obowiązkiem zapłaty')]")).Click();

            webDriver.FindElement(By.XPath("/html[1]/body[1]/main[1]/header[1]/nav[1]/div[1]/div[1]/div[1]/div[2]/div[1]/div[1]/a[2]/span[1]")).Click();

            //TODO TU MOZE BYC BLAD
            webDriver.FindElement(By.XPath("//a[@id='history-link']")).Click();
        }    
    }
}
