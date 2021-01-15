using OpenQA.Selenium;
using System;
using System.Linq;

namespace ToolsQA
{
    public class ProductManager
    {
        private readonly IWebDriver webDriver;
        private const int MIN_IN_STOCK = 20;

        public ProductManager(IWebDriver webDriver)
        {
            this.webDriver = webDriver;
        }

        public void AddProductToCard(ProductModel product)
        {       
            NavigateToProducts();
            //Clicking Category Product
            webDriver.FindElement(By.XPath(product.CategoryXPath)).Click();

            var result = Enumerable.Range(1, MIN_IN_STOCK).OrderBy(g => Guid.NewGuid()).Take(10).ToArray();
            var splitXPath = product.ElemXPath.Split("Q");


            Enumerable.Range(1, product.QtyElem).ToList().ForEach(li =>
            {
                var xPathToClick = String.Concat(splitXPath[0], li, splitXPath[1]);
                webDriver.FindElement(By.XPath(xPathToClick)).Click();
                //write Qty
                var qtyInput = webDriver.FindElement(By.XPath("//input[@id='quantity_wanted']"));
                qtyInput.Clear();
                qtyInput.SendKeys(result[li - 1].ToString());

                //Submit 
                webDriver.FindElement(By.XPath("/html[1]/body[1]/main[1]/section[1]/div[1]/div[1]/section[1]/div[1]/div[2]/div[2]/div[2]/form[1]/div[2]/div[1]/div[2]/button[1]")).Click();

                webDriver.Navigate().Back();
            });

            webDriver.Navigate().Back();
        }

        public void RemoveFromCard()
        {      
            webDriver.FindElement(By.XPath("//div[@class='blockcart cart-preview active']")).Click();
            webDriver.FindElement(By.XPath("/html[1]/body[1]/main[1]/section[1]/div[1]/div[1]/section[1]/div[1]/div[1]/div[1]/div[2]/ul[1]/li[1]/div[1]/div[3]/div[1]/div[3]/div[1]/a[1]/i[1]")).Click();
        }

        public void NavigateToProducts() 
        {
            //Click +
            webDriver.Navigate().GoToUrl("https://dniemiro.dev/2-kategorie");
            webDriver.FindElement(By.XPath("/html[1]/body[1]/main[1]/section[1]/div[1]/div[1]/div[1]/ul[1]/li[2]/ul[1]/li[1]/div[1]/i[1]")).Click();
        }


    }
}






