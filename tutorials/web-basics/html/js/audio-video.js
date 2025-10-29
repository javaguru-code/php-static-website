// audio-video.js
document.addEventListener('DOMContentLoaded', function() {
    // Initialize all media elements
    const mediaElements = document.querySelectorAll('video, audio');
    
    mediaElements.forEach(media => {
        // Add loading state
        const container = media.closest('.media-container') || media.parentElement;
        if (container) {
            container.classList.add('media-loading');
        }
        
        // Handle when media can play
        media.addEventListener('canplay', function() {
            container?.classList.remove('media-loading');
        });
        
        // Handle when media starts playing
        media.addEventListener('play', function() {
            this.classList.add('playing');
            
            // Pause other media when one starts playing
            mediaElements.forEach(m => {
                if (m !== media && !m.paused) {
                    m.pause();
                    m.classList.remove('playing');
                }
            });
        });
        
        // Handle when media is paused
        media.addEventListener('pause', function() {
            this.classList.remove('playing');
        });
        
        // Handle when media ends
        media.addEventListener('ended', function() {
            this.classList.remove('playing');
            this.currentTime = 0;
        });
        
        // Handle errors
        media.addEventListener('error', function() {
            console.error('Error loading media:', this.src);
            const container = this.closest('.media-container') || this.parentElement;
            if (container) {
                container.classList.remove('media-loading');
                const errorMsg = document.createElement('div');
                errorMsg.className = 'alert alert-danger mt-2';
                errorMsg.textContent = 'Error loading media. Please try again later.';
                container.appendChild(errorMsg);
            }
        });
    });
    
    // Initialize custom media controls
    initCustomControls();
    
    // Add keyboard navigation for custom controls
    document.addEventListener('keydown', handleKeyPress);
});

// Initialize custom media controls
function initCustomControls() {
    // Add play/pause toggle to all media elements
    document.querySelectorAll('.media-controls .btn-play').forEach(button => {
        const mediaId = button.getAttribute('data-media-id');
        const media = document.getElementById(mediaId);
        
        if (media) {
            button.addEventListener('click', function() {
                if (media.paused) {
                    media.play();
                    this.innerHTML = '<i class="fas fa-pause"></i> Pause';
                } else {
                    media.pause();
                    this.innerHTML = '<i class="fas fa-play"></i> Play';
                }
            });
            
            // Update button text based on media state
            media.addEventListener('play', function() {
                button.innerHTML = '<i class="fas fa-pause"></i> Pause';
            });
            
            media.addEventListener('pause', function() {
                button.innerHTML = '<i class="fas fa-play"></i> Play';
            });
        }
    });
    
    // Volume controls
    document.querySelectorAll('.volume-control').forEach(input => {
        const mediaId = input.getAttribute('data-media-id');
        const media = document.getElementById(mediaId);
        
        if (media) {
            input.addEventListener('input', function() {
                media.volume = this.value;
                
                // Update mute state based on volume
                if (this.value == 0) {
                    media.muted = true;
                } else {
                    media.muted = false;
                }
            });
        }
    });
}

// Handle keyboard navigation
function handleKeyPress(e) {
    const activeElement = document.activeElement;
    const media = activeElement.tagName === 'VIDEO' || activeElement.tagName === 'AUDIO' 
        ? activeElement 
        : document.querySelector('video:focus, audio:focus');
    
    if (!media) return;
    
    switch(e.key) {
        case ' ':
            e.preventDefault();
            if (media.paused) {
                media.play();
            } else {
                media.pause();
            }
            break;
            
        case 'm':
        case 'M':
            media.muted = !media.muted;
            break;
            
        case 'ArrowRight':
            media.currentTime = Math.min(media.duration, media.currentTime + 5);
            break;
            
        case 'ArrowLeft':
            media.currentTime = Math.max(0, media.currentTime - 5);
            break;
            
        case 'ArrowUp':
            media.volume = Math.min(1, media.volume + 0.1);
            updateVolumeControl(media);
            break;
            
        case 'ArrowDown':
            media.volume = Math.max(0, media.volume - 0.1);
            updateVolumeControl(media);
            break;
            
        case 'f':
        case 'F':
            toggleFullscreen(media);
            break;
    }
}

// Update volume control UI
function updateVolumeControl(media) {
    const volumeControl = document.querySelector(`.volume-control[data-media-id="${media.id}"]`);
    if (volumeControl) {
        volumeControl.value = media.volume;
    }
}

// Toggle fullscreen
function toggleFullscreen(element) {
    if (!document.fullscreenElement) {
        if (element.requestFullscreen) {
            element.requestFullscreen();
        } else if (element.webkitRequestFullscreen) { /* Safari */
            element.webkitRequestFullscreen();
        } else if (element.msRequestFullscreen) { /* IE11 */
            element.msRequestFullscreen();
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.webkitExitFullscreen) { /* Safari */
            document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) { /* IE11 */
            document.msExitFullscreen();
        }
    }
}

// Global functions for custom controls
function playPause(mediaId) {
    const media = document.getElementById(mediaId);
    if (media) {
        if (media.paused) {
            media.play();
        } else {
            media.pause();
        }
    }
}

function setPlaybackRate(mediaId, rate) {
    const media = document.getElementById(mediaId);
    if (media) {
        media.playbackRate = rate;
    }
}

function toggleMute(mediaId) {
    const media = document.getElementById(mediaId);
    if (media) {
        media.muted = !media.muted;
    }
}

function seek(mediaId, time) {
    const media = document.getElementById(mediaId);
    if (media) {
        media.currentTime = time;
    }
}
