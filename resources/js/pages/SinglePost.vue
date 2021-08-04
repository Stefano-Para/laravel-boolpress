<template>
  <section class="my-5" v-if="post">
      <h1>{{ post.title }}</h1>
      <div class="post-info my-3">
        <h4 v-if="post.category">
          <span class="badge badge-primary">{{ post.category.name }}</span>
        </h4>
        <h5 v-if="post.tags.length > 0">
          <span
          v-for="tag in post.tags"
          :key="`tag-${tag.id}`"
          class="badge badge-pills badge-info mr-2"
          >
          {{ tag.name }}
          </span>
        </h5>
      </div>

        <div class="d-flex justify-content-center">
          <img class="img-fluid" :src="post.cover" :alt="post.name">
        </div>

        <p class="my-4">{{ post.content }}</p>

      <router-link class="btn btn-primary" :to="{ name: 'blog' }">Torna al Blog</router-link>
  </section>
  <Loader v-else />
</template>

<script>
import Loader from '../components/Loader';

export default {
    name: 'SinglePost',
    components: {
      Loader
    },
    data: function() {
      return {
        post: null
      }
    },
    created: function() {
      this.getPost(this.$route.params.slug);
    },
    methods: {
      getPost: function(slug) {
        axios
          .get(`http://127.0.0.1:8000/api/posts/${slug}`)
          .then(
            res => {
              this.post = res.data;
            }
          )
          .cath(
            err => {
              console.log(err);
            }
          )
      }
    }
}
</script>

<style>

</style>