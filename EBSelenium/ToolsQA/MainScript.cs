using System;
using System.Collections.Generic;
using OpenQA.Selenium;
using OpenQA.Selenium.Firefox;

namespace ToolsQA
{
    class MainScript
    {
        static void Main(string[] args)
        {
            IWebDriver driver = new FirefoxDriver()
            {
                Url = @"https://172.20.83.89/"
            };

            var cardManager = new ProductManager(driver);
            var registration = new Registration(driver);
            var order = new Order(driver);

            var products = new List<ProductModel>()
            {
                new ProductModel()
                {
                    CategoryXPath = "/html[1]/body[1]/main[1]/section[1]/div[1]/div[1]/div[1]/ul[1]/li[2]/ul[1]/li[1]/div[2]/ul[1]/li[1]/a[1]",
                    ElemXPath     = "/html[1]/body[1]/main[1]/section[1]/div[1]/div[2]/section[1]/section[1]/div[3]/div[1]/div[1]/article[Q]/div[1]/a[1]/img[1]",
                    QtyElem = 5
                },
                new ProductModel()
                {
                     CategoryXPath = "/html[1]/body[1]/main[1]/section[1]/div[1]/div[1]/div[1]/ul[1]/li[2]/ul[1]/li[1]/div[2]/ul[1]/li[2]/a[1]",
                     ElemXPath = "/html[1]/body[1]/main[1]/section[1]/div[1]/div[2]/section[1]/section[1]/div[3]/div[1]/div[1]/article[Q]/div[1]/a[1]/img[1]",
                     QtyElem = 5
                }                                 
            };

            var purchaser = new Purchaser
            {
                FirstName = "Jan",
                Lastname = "Kowalski",
                Email = "kowalskij@interia.pl",
                Password = "Qwerty123",
                Birthday = new DateTime(1994, 07, 05).ToShortDateString(),
                PostalCode = "83-110",
                Address = "Krucza 13/8",
                City = "Sopot"
            };

            
            products.ForEach(p => cardManager.AddProductToCard(p));

            cardManager.RemoveFromCard();
            registration.registerUser(purchaser);
            order.Process(purchaser);
            
        }
    }
}
