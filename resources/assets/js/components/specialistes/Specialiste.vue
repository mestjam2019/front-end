<template>
  <div class="row">
    <div class="col-lg-12">
      <div class="row">
        <div class="col-md-4" v-for="specialiste in specialistes.data" :key="specialiste.id">
          <div class="box_list wow fadeIn">
            <a href="#0" class="wish_bt"></a>
            <figure>
              <a :href="`detail-portfolio`">
                <img :src="`/images/${specialiste.image}`" class="img-fluid" alt>
                <div class="preview">
                  <span>Read more</span>
                </div>
              </a>
            </figure>
            <div class="wrapper">
              <small>{{ specialiste.title }}</small>
              <h3>{{ specialiste.firstname }} {{ specialiste.lastname }}</h3>
              <p>
                Meet your specialist
                <strong>{{ specialiste.address }}</strong>
              </p>
              <span class="rating">
                <i class="icon_star voted"></i>
                <i class="icon_star voted"></i>
                <i class="icon_star voted"></i>
                <i class="icon_star"></i>
                <i class="icon_star"></i>
                <small>(145)</small>
              </span>
              <a
                href="#"
                data-toggle="tooltip"
                data-placement="top"
                data-original-title="Badge Level"
                class="badge_list_1"
              >
                <img src="#" width="15" height="15" alt>
              </a>
            </div>
            <ul>
              <li>
                <a href="#0" onclick="onHtmlClick('Doctors', 1)">
                  <i class="icon_pin_alt"></i>View on map
                </a>
              </li>
              <li>
                <a href="#" target="_blank">
                  <i class="icon_pin_alt"></i>Directions
                </a>
              </li>
              <li>
                <a :href="`detail-portfolio`">Book now</a>
              </li>
            </ul>
          </div>
        </div>
        <!-- /box_list -->
      </div>
      <!-- /row -->
      <pagination :data="specialistes" @pagination-change-page="getResults"></pagination>
      <!-- <nav aria-label class="add_top_20">
        <ul class="pagination pagination-sm">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="#">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>-->
      <!-- /pagination -->
    </div>
    <!-- /col -->
    <!-- <aside class="col-lg-4" id="sidebar">
      <div id="map_listing" class="normal_list"></div>
    </aside>-->
    <!-- /aside -->
  </div>
</template>

<script>
export default {
  mounted() {
    this.fetchData();
  },
  data() {
    return {
      specialistes: {}
      // specialiste: {
      //   firstname: ""
      // }
    };
  },
  methods: {
    // Our method to GET results from a Laravel endpoint
    getResults(page = 1) {
      axios.get("/api/specialistes?page=" + page).then(response => {
        this.specialistes = response.data;
      });
    },

    fetchData() {
      axios
        .get("/api/specialistes")
        .then(res => {
          this.specialistes = res.data;
        })
        .catch(err => {
          console.log(err);
        });
    }
  }
};
</script>
