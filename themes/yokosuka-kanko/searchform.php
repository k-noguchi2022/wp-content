<!-- 検索フォーム -->
<form method="get" class="search-form search_container" action="<?php echo esc_url(home_url('/')); ?>">
  <input type="text" size="25" name="s" class="search-field" placeholder="<?php if (!is_search()) {
                                                                            echo '検索する';
                                                                          } ?>" value="<?php if (is_search()) {
                                                                                          echo get_search_query();
                                                                                        } ?>" />
  <input type="image" class="search_img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/menu/search_logo.png" alt="検索" title="検索">
</form>