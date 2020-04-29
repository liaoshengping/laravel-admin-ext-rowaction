laravel-admin extension
======
演示：https://nimb.ws/BowpvP

在我使用这个这个扩展得时候，没有看到modal 弹窗使用 自定义的html；

在 Action中改成继承这个类
```
use Liaosp\RowAction\Actions\RowAction;
```

使用:
````
public function form($model){
      $html = "<div>自定义html</div>";
     $this->diy($html);  
}
````


