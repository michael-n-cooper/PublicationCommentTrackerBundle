<?php
namespace W3C\PublicationCommentTrackerBundle\Types;

class CommentResponseType extends EnumType
{
    protected $name = 'commentresponse';
    protected $values = array('accept', 'reject', 'other');
}
?>