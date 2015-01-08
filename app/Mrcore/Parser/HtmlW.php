<?php namespace Mrcore\Parser;

Class HtmlW
{
	public $userID;
	public $postID;
	public $postCreator;
	public $isAuthenticated;
	public $isAdmin;
	public $disabledRules;


	/**
     * Parse this php $data into XHTML and run it through text_wiki parser
     *
     * @return string of HTML from unparsed data
     */
    public function parse($data)
	{
		// Run the evaled php through our wiki parser
		$parser = new \Mrcore\Parser\Wiki();
		$parser->userID = $this->userID;
		$parser->postID = $this->postID;
		$parser->postCreator = $this->postCreator;
		$parser->isAuthenticated = $this->isAuthenticated;
		$parser->isAdmin = $this->isAdmin;
		$parser->disabledRules = $this->disabledRules;
		return $parser->parse($data);
	}


	/**
	 * Test proper class instantiation
	 *
	 * @return Hello World success text string
	 */
	public static function test()
	{
		return "Hello World from ".get_class();
	}
}
