<?php //-->
/*
 * This file is part of the Core package of the Eden PHP Library.
 * (c) 2013-2014 Openovate Labs
 *
 * Copyright and license information can be found at LICENSE
 * distributed with this package.
 */

namespace Eden\Type;

/**
 * Core Factory Class
 *
 * @vendor Eden
 * @package Core
 * @author Christian Blanquera cblanquera@openovate.com
 */
class Factory extends Base
{
    const INSTANCE = 1;
	
	/**
     * Returns the data type class
     *
	 * @param scalar|array|null
     * @return Eden\Type\Type
     */
	public function type($type = null) 
	{
		//argument 1 must be a scalar array null
		Argument::i()->test(1, 'scalar', 'array', 'null');
		
		if(func_num_args() > 1) {
			$type = func_get_args();
		}
		
		return Type::i($type);
	}
    
}