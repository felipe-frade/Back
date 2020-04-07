# Author: felipe pereira
# teste com um gerador de bots
import subprocess
import time

caminho = 'C:/xampp/htdocs/testes/teste_python/cria_bots/bots/'
bot = 1

loop = 1

while loop < 5:
	arquivo = open(caminho + 'bot' + str(bot) + '.py', 'w+')
	arquivo.writelines(u'print(1)')
	arquivo.close()

	subprocess.call(["python", caminho + 'bot' + str(bot) + ".py"])

	bot = bot + 1
	loop = loop + 1