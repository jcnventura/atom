<!-- <div class="section" id="events-table"<?php echo 0 < count($eventData) ? '' : 'style="display:none"' ?>> -->

  <h3><?php echo __('Events(s)') ?></h3>

  <table class="table table-bordered multiRow">
    <thead>
      <tr>
        <th style="width: 50%">
          <?php echo __('Type') ?>
        </th><th style="width: 50%">
          <?php echo __('Date') ?>
        </th>
      </tr>
    </thead><tbody>

      <?php $i = 0; foreach ($eventData as $event): ?>
        <?php $form->getWidgetSchema()->setNameFormat("events[$i][%s]") ?>

        <tr class="<?php echo 0 == $i % 2 ? 'even' : 'odd' ?> related_obj_<?php echo $event['id'] ?>">
          <td>
            <div class="animateNicely">
              <input type="hidden" name="events[<?php echo $i ?>][id]" value="<?php echo $event['id'] ?>"/>
              <?php $form->setDefault('eventType', $event['typeId']); ?>
              <?php echo $form->eventType ?>
            </div>
          </td><td>
            <div class="animateNicely">
              <?php $form->setDefault('date', $event['date']); ?>
              <?php echo $form->date->renderRow(array('class' => 'date-widget', 'icon' => image_path('calendar.png'))) ?>
            </div>
            <div class="animateNicely">
              <?php $form->setDefault('agent', $event['agent']); ?>
              <?php echo $form->agent ?>
            </div>
            <div class="animateNicely">
              <?php $form->setDefault('note', $event['note']); ?>
              <?php echo render_field($form->note, $event['note'], array('name' => 'value')) ?>
            </div>
          </td>
        </tr>

        <?php $i++ ?>
      <?php endforeach; ?>

      <?php $form->getWidgetSchema()->setNameFormat("events[$i][%s]") ?>

      <tr class="<?php echo 0 == $i % 2 ? 'even' : 'odd' ?>">
        <td>
          <div class="animateNicely">
            <?php $form->setDefault('eventType', ''); ?>
            <?php echo $form->eventType ?>
          </div>
        </td><td>
          <div class="animateNicely">
            <?php $form->setDefault('date', ''); ?>
            <?php echo $form->date->renderRow(array('class' => 'date-widget', 'icon' => image_path('calendar.png'))) ?>
	  </div>
          <div class="animateNicely">
            <?php $form->setDefault('agent', ''); ?>
            <?php echo $form->agent ?>
	  </div>
          <div class="animateNicely">
            <?php $form->setDefault('note', ''); ?>
            <?php echo $form->note ?>
          </div>
        </td>
      </tr>

    </tbody>

    <tfoot>
      <tr>
        <td colspan="3"><a href="#" class="multiRowAddButton"><?php echo __('Add new') ?></a></td>
      </tr>
    </tfoot>

  </table>

  <div class="description">
    <?php echo __('<strong>Type:</strong> Enter a name for the alternative identifier field that indicates its purpose and usage.<br/><strong>Agent:</strong> Enter the agent associated with the event.') ?>
  </div>

<!-- </div> -->
