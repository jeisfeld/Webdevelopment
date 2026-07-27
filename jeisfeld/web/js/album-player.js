const albums = [
  { slug: "indiewelt", title: "In die Welt" },
  { slug: "wasser", title: "Wasser" },
  { slug: "neuewellen", title: "Neue Wellen" },
];

const albumLinks = document.getElementById("albumLinks");
if (albumLinks) {
  albums.filter((album) => album.slug !== currentAlbum).forEach((album) => {
    const link = document.createElement("a");
    const cover = document.createElement("img");
    link.href = `/${album.slug}/`;
    link.title = album.title;
    link.setAttribute("aria-label", `Open album ${album.title}`);
    cover.src = `/${album.slug}/cover.jpg`;
    cover.alt = `${album.title} album cover`;
    link.appendChild(cover);
    albumLinks.appendChild(link);
  });
}

const player = document.getElementById("player");
const playlistEl = document.getElementById("playlist");
const nowPlayingEl = document.getElementById("nowPlaying");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
const playPauseBtn = document.getElementById("playPauseBtn");
let currentIndex = 0;

function highlightActive() {
  [...playlistEl.children].forEach((item) => item.classList.remove("active"));
  const active = playlistEl.children[currentIndex];
  if (active) active.classList.add("active");
}

function setNowPlaying(text) {
  nowPlayingEl.textContent = text;
}

function playIndex(index, autoplay = false) {
  if (index < 0 || index >= tracks.length) return;
  currentIndex = index;
  player.src = tracks[currentIndex].file;
  player.load();
  highlightActive();
  setNowPlaying(`Selected: ${tracks[currentIndex].title}`);

  if (autoplay) {
    player.play().then(() => {
      setNowPlaying(`Playing: ${tracks[currentIndex].title}`);
    }).catch(() => {
      setNowPlaying(`Ready to play: ${tracks[currentIndex].title} (press Play)`);
    });
  }
}

function renderPlaylist() {
  playlistEl.innerHTML = "";
  tracks.forEach((track, index) => {
    const item = document.createElement("li");
    item.dataset.index = index;

    const title = document.createElement("div");
    title.className = "row";
    title.innerHTML = `<strong>${String(index + 1).padStart(2, "0")}.</strong> <span>${track.title}</span>`;

    const playIcon = document.createElement("div");
    playIcon.className = "meta";
    playIcon.textContent = "▶";

    item.appendChild(title);
    item.appendChild(playIcon);
    item.addEventListener("click", () => playIndex(index, true));
    playlistEl.appendChild(item);
  });
  highlightActive();
}

function nextTrack() {
  playIndex((currentIndex + 1) % tracks.length, true);
}

function prevTrack() {
  playIndex((currentIndex - 1 + tracks.length) % tracks.length, true);
}

player.addEventListener("ended", nextTrack);
player.addEventListener("play", () => setNowPlaying(`Playing: ${tracks[currentIndex].title}`));
player.addEventListener("pause", () => setNowPlaying(`Paused: ${tracks[currentIndex].title}`));
prevBtn.addEventListener("click", prevTrack);
nextBtn.addEventListener("click", nextTrack);
playPauseBtn.addEventListener("click", () => {
  if (player.paused) player.play();
  else player.pause();
});

renderPlaylist();
playIndex(0);
