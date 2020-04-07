# Author: felipe pereira
# usados para pegar o html inteiro de uma página qualquer
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time

driver = webdriver.Chrome(executable_path=r"path-to-chromedriver.exe")

# Abre uma nova aba
driver.find_element_by_tag_name('body').send_keys(Keys.CONTROL + 't') 

# Carrega a nova aba
driver.get('file:///C:/xampp/htdocs/teste/teste.php')

time.sleep(3)

texto = driver.execute_script("if(document.getElementsByTagName('pre')){ return document.getElementsByTagName('pre')[0].innerHTML}else{ return 0 }")
