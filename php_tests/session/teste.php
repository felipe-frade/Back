<?php

echo "ola!<br>";

switch(session_status()){
	case PHP_SESSION_DISABLED:
	echo "as sessões estiverem desabilitadas.";
	break;

	case PHP_SESSION_NONE:
	echo "as sessões estiverem habilitadas, mas nenhuma existir.";
	break;

	case PHP_SESSION_ACTIVE:
	echo "as sessões estiverem habilitadas, e uma existir.";
	break;
}

?>
