# marmot-common

---

###概述

####文件目录

		src
			Common
				Model
					Object.php
					ObjectIdentify.php
					ObjectStatus.php
					ObjectTime.php
					
####文件概述

**objectIndetiy 对象标示性状**

包含了`2`个抽象方法:

* `setId(int id)`: 设置对象`id`
* `getId(): int`: 获取对象`id`	

用于抽象我们所有的类的`标示`,所有使用了该性状的类,必须具体化这两个方法.

**objectStatus 对象状态性状**

包含了`2`个`protected`的参数:

* `protected $statusTime`: 状态的修改时间
* `protected $status`: 状态

`1`个抽象方法:

* `setStatus(int $status)`: 设置状态,需要使用该性状的类具体化.

`3`个公共方法:

* `setStatusTime()`: 设置状态修改时间
* `getStatusTime()`: 获取状态修改时间
* `getStatus()`: 获取状态

用于抽象我们所有的类的`状态`.因为每个类的状态表示不一样,所以我们抽象出来一个`设置状态`方法,让使用该性状的类根据自己的具体情况来使用它.

**objectTime 对象时间性状**

包含了`2`个`protected`的参数:

* `protected $createTime`: 创建时间
* `protected $updateTime`: 修改时间

`4`个公共方法:

* `setCreateTime(int $createTime)`: 设置创建时间
* `getCreateTime() : int`: 获取创建时间
* `setUpdateTime(int $updateTime)`: 设置更新时间
* `getUpdateTime() : int`: 获取更新时间

#####`object`

该文件引用了所有我们对于`对象公共的性状`.这样如果一个类只需要单独引用我们该`Object`性状即可,不需要分开引用其他性状.

###使用

		use Marmot\Common\Model\Object;
		
		class xxx 
		{
			use Object;
		}
		