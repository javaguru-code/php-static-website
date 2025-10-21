// js/chat.js
(function() {
  'use strict';

  console.log('chat.js version', '2025-10-19-2');

  let chatModal, chatMessagesEl, chatInputEl, chatFormEl, sendBtn, spinnerEl, sendLabelEl;
  const history = [];

  function getApiUrl() {
    const modal = document.getElementById('chatModal');
    const dataUrl = modal && modal.dataset && modal.dataset.apiUrl;
    const base = (window.BASE_URL || '/');
    let url = dataUrl || (base.replace(/\/$/, '/') + 'ajax/openai.php');
    // Normalize robustly
    if (/^https?:\/\//i.test(url)) return url;
    if (url.startsWith('/')) return new URL(url, window.location.origin).toString();
    return new URL(url, base).toString();
  }

  function createCopyButton(textProvider) {
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className = 'btn btn-sm btn-outline-secondary ms-2';
    btn.innerHTML = '<i class="bi bi-clipboard"></i> Copy';
    btn.addEventListener('click', async () => {
      try {
        await navigator.clipboard.writeText(typeof textProvider === 'function' ? textProvider() : textProvider);
        const old = btn.innerHTML; btn.innerHTML = '<i class="bi bi-check2"></i> Copied';
        setTimeout(() => (btn.innerHTML = old), 1500);
      } catch {}
    });
    return btn;
  }

  function appendMessage(role, content) {
    const wrapper = document.createElement('div');
    wrapper.className = `mb-3 ${role === 'user' ? 'text-end' : ''}`;

    const bubble = document.createElement('div');
    bubble.className = `d-inline-block p-3 rounded position-relative ${role === 'user' ? 'bg-primary text-white' : 'bg-light'}`;
    bubble.style.maxWidth = '85%';
    bubble.style.whiteSpace = 'pre-wrap';

    const body = document.createElement('div');
    body.className = 'chat-body';
    body.textContent = content || '';

    bubble.appendChild(body);

    if (role === 'assistant') {
      const toolbar = document.createElement('div');
      toolbar.className = 'd-flex justify-content-end mt-2';
      toolbar.appendChild(createCopyButton(() => body.textContent));
      bubble.appendChild(toolbar);
    }

    wrapper.appendChild(bubble);
    chatMessagesEl.appendChild(wrapper);
    chatMessagesEl.scrollTop = chatMessagesEl.scrollHeight;

    return { wrapper, bubble, body };
  }

  function setSending(isSending) {
    chatInputEl.disabled = isSending;
    sendBtn.disabled = isSending;
    spinnerEl.classList.toggle('d-none', !isSending);
    sendLabelEl.classList.toggle('d-none', isSending);
  }

  async function streamMessage(message) {
    setSending(true);
    const assistant = appendMessage('assistant', '');
    
    try {
      // Show coming soon message
      await new Promise(resolve => setTimeout(resolve, 800)); // Small delay for better UX
      assistant.body.innerHTML = '🚀 AI Chat Feature Coming Soon!<br><br>We\'re working hard to bring you an amazing AI chat experience. Please check back soon!<br><br>In the meantime, feel free to explore our tutorials and resources.';
      
      // Add the message to history
      history.push({ role: 'user', content: message });
      history.push({ role: 'assistant', content: 'AI Chat Feature Coming Soon!' });
    } catch (err) {
      console.error('Chat error:', err);
      assistant.body.textContent = 'Sorry, an error occurred. Please try again later.';
    } finally {
      setSending(false);
    }
    
    return;
  }

  function init() {
    chatModal = document.getElementById('chatModal');
    if (!chatModal) return;

    chatMessagesEl = chatModal.querySelector('.chat-messages');
    chatFormEl = chatModal.querySelector('form');
    chatInputEl = chatModal.querySelector('input[type="text"]');
    sendBtn = chatModal.querySelector('button[type="submit"]');
    spinnerEl = sendBtn ? sendBtn.querySelector('.spinner-border') : null;
    sendLabelEl = sendBtn ? sendBtn.querySelector('.btn-label') : null;

    // Initialize chat with welcome message if empty
    if (chatMessagesEl && chatMessagesEl.children.length === 0) {
      const welcomeMsg = document.createElement('div');
      welcomeMsg.className = 'alert alert-info';
      welcomeMsg.innerHTML = '&#x1F44B; Welcome to FS Master Chat!<br><br>This feature is coming soon. Stay tuned for updates!';
      chatMessagesEl.appendChild(welcomeMsg);
    }

    const openBtn = document.getElementById('chatOpenBtn');
    if (!openBtn) return;

    function fallbackOpenModal() {
      const el = document.getElementById('chatModal');
      if (!el) return;
      el.classList.add('show');
      el.style.display = 'block';
      el.removeAttribute('aria-hidden');
      el.setAttribute('aria-modal', 'true');
      // rudimentary backdrop
      let backdrop = document.getElementById('chatModalBackdrop');
      if (!backdrop) {
        backdrop = document.createElement('div');
        backdrop.id = 'chatModalBackdrop';
        backdrop.className = 'modal-backdrop fade show';
        document.body.appendChild(backdrop);
      }
      const closeBtn = el.querySelector('[data-bs-dismiss="modal"]');
      if (closeBtn) {
        closeBtn.addEventListener('click', () => {
          el.classList.remove('show');
          el.style.display = 'none';
          el.setAttribute('aria-hidden', 'true');
          if (backdrop) backdrop.remove();
        }, { once: true });
      }
    }

    chatModal = (window.bootstrap && bootstrap.Modal) ? new bootstrap.Modal(document.getElementById('chatModal')) : null;

    openBtn.addEventListener('click', (e) => {
      try {
        if (chatModal) {
          chatModal.show();
        } else {
          fallbackOpenModal();
        }
      } catch (_) {
        fallbackOpenModal();
      }
      // Welcome message is now handled in the init function
      setTimeout(() => chatInputEl.focus(), 200);
    });

    chatFormEl.addEventListener('submit', (e) => {
      e.preventDefault();
      const text = chatInputEl.value.trim();
      if (!text) return;
      appendMessage('user', text);
      chatInputEl.value = '';
      try {
        streamMessage(text);
      } catch (err) {
        console.error('Chat submit error', err);
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
