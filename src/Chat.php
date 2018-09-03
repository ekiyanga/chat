<?php
namespace ChatApp;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use ChatApp\Entities\Message;
/**
* 
*/
class Chat implements MessageComponentInterface
{
	protected $clients;

	function __construct()
	{
		$this->clients = new \SplObjectStorage;
	}

	public function onOpen(ConnectionInterface $conn){
		$this->clients->attach($conn);
		echo "New Connection ({$conn->resourceId})\n";
	}

	public function onMessage(ConnectionInterface $from, $msg){
		$msg = json_decode($msg);

		switch ($msg->type) {
			case 'message':
				foreach($this->clients as $client){
					if($client !== $from){
							$client->send($msg->text);
						}
					}

					Message::create([
						'text' => $msg->text,
						'sender' => $msg->sender						]);
							break;
						
						default:
							# code...
				break;
		}

	}

	public function onClose(ConnectionInterface $conn){
		$this->clients->detach($conn);
			echo "Connection ({$conn->resourceId}) has disconnected\n";
	}

	public function onError(ConnectionInterface $conn, \Exception $e){
		echo "An Error Has Occuerd: {$e->getMessage}";
		$conn->close();
	}

}

?>