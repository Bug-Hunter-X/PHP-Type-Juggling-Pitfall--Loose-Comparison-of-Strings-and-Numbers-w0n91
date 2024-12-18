To fix this, use PHP's strict comparison operator (`===`), which checks both value and type:

```php
$value = "10";
$number = 10;
if ($value === $number) {
  echo "Values are equal";
} else {
  echo "Values are not equal";
}
```

Now the output will be "Values are not equal", reflecting the actual difference in data type.  Strict comparison ensures that both the value and the type of the operands are identical before returning `true`.