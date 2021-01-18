using OpenQA.Selenium;
using System.Collections.Generic;

namespace ToolsQA
{
    class Registration
    {
        private readonly IWebDriver webDriver;
        private readonly string registerUrl = @"https://172.20.83.89/logowanie?create_account=1";

        public Registration(IWebDriver webDriver)
        {
            this.webDriver = webDriver;
        }

        public void registerUser(User newUser)
        {
            NavigateToRegistrationPage();

            webDriver.FindElement(By.Name("id_gender")).Click();

            foreach (var prop in newUser.GetType().GetProperties())
            {
                try
                {
                    webDriver.FindElement(By.Name(prop.Name.ToLower()))
                             .SendKeys((string)prop.GetValue(newUser, null).ToString());
                }
                catch
                {
                    continue;
                }
                
            }

            webDriver.FindElement(By.Name("psgdpr")).Click();
            webDriver.FindElement(By.XPath("//button[contains(text(),'Zapisz')]")).Click();
        }

        private void NavigateToRegistrationPage()
        {
            webDriver.Navigate().GoToUrl(registerUrl);
        }

    }
}
