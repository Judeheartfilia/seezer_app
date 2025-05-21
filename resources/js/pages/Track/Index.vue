<template>

  <Head title="Tracks" />

  <MusicLayout>
    <template #title>
      Tracks
    </template>

    <template #action>
      <Link v-if="$page.props.auth.isAdmin" :href="route('tracks.create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded w-full mb-">
      Ajouter une musique
      </Link>
    </template>

    <template #content>
<<<<<<< HEAD
      <input v-model="filter" type="text" name="filter" id="filter" placeholder="Rechercher..."
        class="shadow border rounded py-2 px-3 text-gray-700 appearance-none leading-tight focus:outline-none focus:shadow-outline mb-2">

      <div class="grid grid-cols-4 gap-4">
        <Track v-for="track in filteredTracks" :key="track.uuid" :track="track" @play="playTrack" />
      </div>
=======
      <TrackList :tracks="tracks" />
>>>>>>> ami/main
    </template>
  </MusicLayout>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';
import MusicLayout from '@/layouts/MusicLayout.vue';
<<<<<<< HEAD
import Track from '@/components/Track.vue';
=======
import TrackList from '@/components/TrackList.vue';
>>>>>>> ami/main

export default {
  name: 'Index',
  components: {
    Head,
    MusicLayout,
<<<<<<< HEAD
    Track,
    Link,
=======
    Link,
    TrackList,
>>>>>>> ami/main
  },
  props: {
    tracks: Array,
  },
<<<<<<< HEAD
  data() {
    return {
      audio: null,
      currentTrack: null,
      filter: '',
    }
  },
  computed: {
    filteredTracks() {
      return this.tracks.filter(track =>
        track.title.toLowerCase().includes(this.filter.toLowerCase())
        || track.artist.toLowerCase().includes(this.filter.toLowerCase())
      );
    }
  },
  methods: {
    playTrack(track) {
      if (! this.currentTrack) {
        this.audio = new Audio('storage/' + track.music);
        this.audio.play();
      } else if (this.currentTrack === track.uuid) {
        this.audio.paused ? this.audio.play() : this.audio.pause();
      } else {
        this.audio.pause();
        this.audio.src = 'storage/' + track.music;
        this.audio.play();
      }

      this.currentTrack = track.uuid;
    },
  },
=======
>>>>>>> ami/main
}
</script>
