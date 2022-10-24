from selenium import webdriver
from selenium.webdriver.common.keys import Keys

usuario = 'rafacamargo'
senha = 560224062910
browser = webdriver.Chrome()

browser.get('https://sig.ifc.edu.br/sigaa/verTelaLogin.do')

browser.find_element('name', 'user.login').send_keys(usuario)
browser.find_element('name', 'user.senha').send_keys(senha)
browser.find_element('name', 'user.senha').send_keys(Keys.ENTER)

browser.find_element('name', 'DESENVOLVIMENTO WEB II').click()