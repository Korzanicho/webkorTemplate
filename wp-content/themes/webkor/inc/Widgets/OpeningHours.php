<?php

namespace Webkor\Theme\Widgets;

class OpeningHours extends \WP_Widget {
  public $daysOfWeek;


  public function __construct() {
    $this->daysOfWeek = [
      'mon' => 'Poniedziałek',
      'tue' => 'Wtorek',
      'wed' => 'Środa',
      'thu' => 'Czwartek',
      'fri' => 'Piątek',
      'sat' => 'Sobota',
      'sun' => 'Niedziela'
    ];

    parent::__construct(
      'opening_hours',
      'Godziny otwarcia',
      [
        'classname' => 'webkor-opening-hours-widget',
        'description' => 'Widget pokazuje godziny otwarcia dla danego dnia tygodnia'
      ]
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters('widget_title', $instance['title']);

    echo $args['before_widget'];

    if (! empty($title)) {
      echo $args['before_title'] . $title . $args['after_title'];
    }

    echo '<ul>';

      foreach ($this->daysOfWeek as $key => $dayName) {
        ?>
          <li>
            <?= $dayName ?>: <?= $instance[$key] ?>
          </li>
        <?php
      }

    echo '</ul>';
  }

  public function form ( $instance ) {
    if (isset($instance['title'])) $title = $instance['title'];
    else $title = 'Godziny otwarcia';

    foreach ($this->daysOfWeek as $key => $dayName) {
      if (isset($instance[$key])) $$key = $instance[$key];
      else $$key = '08:00 - 22:30';
    }
    
    ?>

      <div>
        <label for="<?= $this->get_field_name('title') ?>">Tytuł</labale>
        <input class="widefat" id="<?= $this->get_field_name('title') ?>" name="<?= $this->get_field_name('title') ?>" type="text" value="<?= esc_attr($title) ?>"/>
      </div>

    <?php

      foreach ($this->daysOfWeek as $key => $dayName) {
        ?>
          <label for="<?= $this->get_field_name($key) ?>"><?= $dayName ?></labale>
          <input class="widefat" id="<?= $this->get_field_name($key) ?>" name="<?= $this->get_field_name($key) ?>" type="text" value="<?= esc_attr($$key) ?>"/>
        <?php
      }
  }

  public function update ( $new_instance, $old_instance ) {
    $instance = [];

    $instance['title'] = !empty($new_instance['title']) ? strip_tags($new_instance['title']) : '';

    foreach ($this->daysOfWeek as $key => $dayName) {
      $instance[$key] = !empty($new_instance[$key]) ? strip_tags($new_instance[$key], '<b><br><i>') : '';
    }

    return $instance;
  }
}