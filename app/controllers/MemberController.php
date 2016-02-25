<?php

class MemberController extends ControllerBase
{

  public function indexAction()
  {
    $member = Member::find();
    $this ->view ->data = $member;
  }

  public function addAction()
  {

  }

  public function editAction()
  {

  }

  public function deleteAction()
  {

  }
}
