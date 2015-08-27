<?php
namespace W3C\PublicationCommentTrackerBundle\Types;

class CommentStatusType extends EnumType
{
    protected $name = 'commentstatus';
    protected $values = array('file', 'discuss', 'response', 'acknowledgement');
}
?>