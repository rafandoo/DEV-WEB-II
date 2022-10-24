
import time
import json
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.support import expected_conditions
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.desired_capabilities import DesiredCapabilities

class TestQualquercoisa():
  def setup_method(self, method):
    self.driver = webdriver.Chrome()
    self.vars = {}
  
  def teardown_method(self, method):
    self.driver.quit()
  
  def test_qualquercoisa(self):
    self.driver.get("https://sig.ifc.edu.br/sigaa/verTelaLogin.do")
    self.driver.set_window_size(945, 1012)
    self.driver.find_element(By.NAME, "user.login").click()
    self.driver.find_element(By.NAME, "user.login").send_keys("rafacamargo")
    self.driver.find_element(By.NAME, "user.senha").send_keys("560224062910")
    self.driver.find_element(By.NAME, "user.senha").send_keys(Keys.ENTER)
    self.driver.find_element(By.LINK_TEXT, "DESENVOLVIMENTO WEB II").click()
  
