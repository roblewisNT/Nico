
    <form class="event-registration text-m" action="hello@newterritory.studio" method="post">

      <div class="form-element form-name">
<!--        <label for="firstname">Name: *</label>-->
        <input class="orderfields text-m select" type="text" id="name" name="name" placeholder="Name" value="<?= isset($data['name']) ? $data['name'] : '' ?>" required/>
      </div>


      <input type="text" name="item" list="itemname" class="orderfields text-m form-product" placeholder="Product">
        <datalist id="itemname">
        <?php

    $projects = page('projects')->children()->visible();

    /*

    The $limit parameter can be passed to this snippet to
    display only a specified amount of projects:

    ```
    <?php snippet('showcase', ['limit' => 3]) ?>
    ```

    Learn more about snippets and parameters at:
    https://getkirby.com/docs/templates/snippets

    */

    if(isset($limit)) $projects = $projects->limit($limit);

    ?>
         <?php foreach($projects as $project): ?>
                         <option class="text-m"><?= $project->title()->text() ?></option>
      <?php endforeach ?>
        </datalist>
        
        <input type="text" name="qty" list="qtylist" class="orderfields text-m form-quantity" placeholder="Quantity">
          <datalist id="qtylist">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist>
        
<!--        Add product -->
      <p class="text-m form-add-trigger">+</p>
       <div class="form-add-active">
       
        <input type="text" name="item" list="itemname" class="orderfields text-m form-add-active-name" placeholder="Product">
        <datalist id="itemname">
        <?php

    $projects = page('projects')->children()->visible();

    /*

    The $limit parameter can be passed to this snippet to
    display only a specified amount of projects:

    ```
    <?php snippet('showcase', ['limit' => 3]) ?>
    ```

    Learn more about snippets and parameters at:
    https://getkirby.com/docs/templates/snippets

    */

    if(isset($limit)) $projects = $projects->limit($limit);

    ?>
         <?php foreach($projects as $project): ?>
                         <option class="text-m"><?= $project->title()->text() ?></option>
      <?php endforeach ?>
        </datalist>
        
        
        <input type="text" name="qty" list="qtylist" class="orderfields text-m form-add-active-quantity" placeholder="Quantity">
          <datalist id="qtylist">
            <option value="1">
            <option value="2">
            <option value="3">
            <option value="4">
            <option value="5">
          </datalist>
        
        
        </div>
<!--        End add product -->
        
        
        
        
        


      <div class="form-element form-email select">
<!--        <label for="email">Email: *</label>-->
        <input class="orderfields text-m"  type="email" name="email" id="email" placeholder="mail@example.com" value="<?= isset($data['email']) ? $data['email'] : '' ?>" required/>
      </div>

<!--
      <div class="form-element">
        <label for="message">Message:</label>
        <textarea class="text-s orderfields" name="message" id="message" placeholder="Do you have any comments?"><?= isset($data['message']) ? $data['message'] : '' ?></textarea>
      </div>
-->

<!--
      <div class="honey">
         <label for="message">If you are a human, leave this field empty</label>
         <input class="orderfields text-s"  type="website" name="website" id="website" placeholder="http://example.com" value="<?= isset($data['website']) ? $data['website'] : '' ?>"/>
      </div>
      <p>* required</p>
-->

      <button class="button text-m select" type="submit" name="register" value="Register">Send order</button>

    </form>

