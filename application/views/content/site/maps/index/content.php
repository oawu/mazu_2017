<div id='maps' data-location='<?php echo base_url ('api', 'locations');?>' data-avatar='<?php echo User::avatar ();?>' data-paths='<?php echo $paths;?>' data-icon='<?php echo resource_url ('resource', 'image', 'm.png');?>'></div>

<select id='select'>
  <optgroup label='陣頭路關'>
    <option value='d19b'>三月十九 下午</option>
    <option value='d19c'>三月十九 晚間</option>
    <option value='d20b'>三月二十 下午</option>
    <option value='d20c'>三月二十 晚間</option>
  </optgroup>
  <optgroup label='藝閣路關'>
    <option value='i19b'>三月十九 下午</option>
    <option value='i19c'>三月十九 晚間</option>
    <option value='i20b'>三月二十 下午</option>
    <option value='i20c'>三月二十 晚間</option>
    <option value='i21c'>三月廿一 晚間</option>
    <option value='i22c'>三月廿二 晚間</option>
    <option value='i23c'>三月廿三 晚間</option>
  </optgroup>
</select>
<div id='f' class='fb-like' data-href='<?php echo base_url ('maps');?>' data-send='false' data-layout='button_count' data-action='like' data-show-faces='false' data-share='true'></div>
<div id='z'><a class='icon-zi'></a><a class='icon-zo'></a></div>
<div id='o' class='icon-my_location'></div>
<div id='l'>
  <span>地圖資料 ©2017 Google</span>
  <a href='https://www.google.com/intl/zh-TW_US/help/terms_maps.html' target='_blank'>使用條款</a>
  <span>北港迎媽祖</span>
  <a href='<?php echo base_url ('license');?>' target='_blank'>使用條款</a>
</div>