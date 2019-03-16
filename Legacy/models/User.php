<?php

/**
 * Class User
 * @author: bmd
 * @version: 1.0 08/03/19
 */
abstract class User
{
    private $id;
    private $nick;
    private $email;
    private $pass;

    /**
     * Constructor.
     * @param $id
     * @param $nick
     * @param $email
     * @param $pass
     */
    public function __construct($id, $nick, $email, $pass)
    {
        $this->id = $id;
        $this->nick = $nick;
        $this->email = $email;
        $this->pass = $pass;
    }

    /**
     * @return $this->id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return $this->nick
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * @param $nick
     */
    public function setNick($nick)
    {
        $this->nick = $nick;
    }

    /**
     * @return $this->email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return $this->pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param $pass
     */
    public function setPass($pass)
    {
        $this->pass = password_hash($pass,PASSWORD_DEFAULT);
    }

}