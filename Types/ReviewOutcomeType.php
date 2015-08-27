<?php
namespace W3C\PublicationCommentTrackerBundle\Types;

class ReviewOutcomeType extends EnumType
{
    protected $name = 'reviewoutcome';
    protected $values = array('open', 'nocomment', 'filecomment');
}
?>