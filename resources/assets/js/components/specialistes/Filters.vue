<template>
  <div class="filters_listing">
    <div class="container">
      <ul class="clearfix">
        <li>
          <h6>Type</h6>
          <div class="switch-field">
            <input type="radio" id="STI" name="type_patient">
            <label for="STI">STI Tests</label>
            <input type="radio" id="Contraceptive" name="type_patient">
            <label for="Contraceptive">Contraceptive counselling</label>
            <input type="radio" id="Menstruation" name="type_patient">
            <label for="Menstruation">Menstruation</label>
            <input type="radio" id="Cancer" name="type_patient">
            <label for="Cancer">infections</label>
            <input type="radio" id="Infections" name="type_patient" checked>
            <label for="Infections">Cancer</label>
          </div>
          <!-- <nav aria-label class="add_top_20">
            <ul class="pagination pagination-sm">
              <li class="page-item active">
                <a class="page-link" href>STI Tests</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Contraceptive</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Menstruation</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Infections</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">Cancer</a>
              </li>
            </ul>
          </nav>-->
        </li>
        <li>
          <h6>Sort by</h6>
          <select name="orderby" class="selectbox">
            <option value="Closest">Closest</option>
            <option value="Best rated">Best rated</option>
            <option value="Men">Men</option>
            <option value="Women">Women</option>
          </select>
        </li>
      </ul>
    </div>
    <!-- /container -->
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
