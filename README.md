# marmot-common

---

###概述

####文件目录

		src
			Common
				Model
					ComplexData.php
					Object.php
					IObjet.php
					ObjectStatus.php
					ObjectTime.php
					
####文件概述

**ComplexData 抽象复杂数据类**

设置复杂数据抽象类,每个复杂数据对象需要继承该类.并且需要实现自己的:

* `save()`
* `fetch()`

如果是存储`mongo`复杂数据类,则需要使用`mongo`的`adapter`.

**IObjet marmot对象接口**

* `setId(int id)`: 设置对象`id`
* `getId(): int`: 获取对象`id`	
* `setStatusTime(int $statusTime)`: 设置对象状态更新时间
* `getStatusTime() int`: 获取对象状态更新时间
* `setStatus(int $status)`: 设置对象状态
* `getStatus(): int`: 返回对象状态
* `setCreateTime(int $createTime)`: 设置创建时间
* `getCreateTime() : int`: 获取创建时间
* `setUpdateTime(int $updateTime)`: 设置更新时间
* `getUpdateTime() : int`: 获取更新时间

用于抽象我们所有的类的`标示`,所有使用了该性状的类,必须具体化这两个方法.

**objectStatus 对象状态性状**

包含了`2`个`protected`的参数:

* `protected $statusTime`: 状态的修改时间
* `protected $status`: 状态

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
		
###版本概述

####1.0.0

初始化,使用性状实现了一些框架内部抽象的对象共用方法.

####1.1.0

添加了`ComplexData.php`,对一些复杂数据对象实现了抽象类.

####1.2.0

* 添加了`IObject`对象,因为性状不能实现类似`instanceof`的判断.
* 取消了`ObjectIdentify`性状,因为内部都是抽象方法,使用接口来实现.
* 取消了`Object`性状中引用的`ObjectIdentify`.
* 取消了`ObjectStatus`的`setStatus`,使用接口来实现.