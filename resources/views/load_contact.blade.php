@foreach($data as $value) 
<?php $id = $value->id; ?>
<li class="clearfix">
  <section class="left">
    <img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
    <h3></h3>
    <span class="meta">Product ID: 543J423</span>
  </section>
  
  <section class="right">
    <span class="price">$45.00</span>
    <span class="darkview">
    <a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
    <a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
    </span>
  </section>
</li>
@endforeach

<div class="show_more_main" id="show_more_main<?php echo $id; ?>">
<span id="<?php echo $id; ?>" class="show_more" title="Load more posts">Show more</span>