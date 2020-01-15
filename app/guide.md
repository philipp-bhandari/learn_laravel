### Insert Date String extension ctrl + shift + i <hr>

## Day 1 
_2020-01-15 23:30:54_

### Отношения Eloquent 
Теперь, когда наши модели определены, нам нужно связать их. Например, наш User может иметь несколько Task, в то время как Task привязан к единственному User. Определение взаимосвязи позволит нам быстро проходить через наши отношения: 

<pre>
$user = App\User::find(1);

foreach ($user->tasks as $task) {
  echo $task->name;
}
</pre>

