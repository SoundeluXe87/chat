<?php
class Message
{
	private $id;
	private $content;
	private $date;
	private $id_author;
	private $db;
	private $author;

	public function __construct($db)
	{
		$this->db = $db;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getContent()
	{
		return $this->content;
	}
	public function getDate()
	{
		return $this->date;
	}
	public function getAuthor()
	{
		if (!$this->author)
		{
			$userManager = new UserManager($this->db);
			$this->author = $userManager->findById($this->id_author);
		}
		return $this->author;
	}
	public function setContent($content)
	{
		$this->content = $content;
	}
	public function setAuthor(User $author)
	{
		$this->author = $author;
	}
}
?>