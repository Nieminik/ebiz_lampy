using OpenQA.Selenium;
using System;
using System.Linq;

namespace ToolsQA
{
    public class ProductManager
    {
        private readonly IWebDriver webDriver;

        public ProductManager(IWebDriver webDriver)
        {
            this.webDriver = webDriver;
        }

        public void AddProductToCard(string xPath, int qty)
        {
           // webDriver.Navigate

            webDriver.FindElement(By.XPath(xPath)).Click();

            var touchSpinUp =  webDriver.FindElement(By.XPath("//i[@class='material-icons touchspin-up']"));

            Repeat(qty, () => {
                touchSpinUp.Click();
            });

            webDriver.FindElement(By.XPath("//div[@class='add']")).Click();
            webDriver.Navigate().Back();
        }

        public void RemoveFromCard(int qty = 1)
        {
            webDriver.FindElement(By.XPath("//div[@class='blockcart cart-preview active']")).Click();

            var touchSpinDown = webDriver.FindElements(By.XPath(@"//button"))[2];

            //Enumerable.

            Repeat(qty, () => touchSpinDown.Click()); 
        }

        private static void Repeat(int count, Action action)
        {
            for (int i = 1; i <= count; i++)
                action();
        }
    }
}






