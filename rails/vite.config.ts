import { defineConfig } from 'vite'
import RubyPlugin from 'vite-plugin-ruby'
import FullReload from 'vite-plugin-full-reload'

export default defineConfig({
  plugins: [
    RubyPlugin(),
    FullReload(['config/routes.rb', 'app/views/**/*', 'app/helpers/**/*'], { delay: 200 }),
  ],
  server: {
    host: '0.0.0.0',
    port: 3036,
    hmr: {
      host: 'localhost',
      port: 3036,       // ← 追加
      clientPort: 3036, // ← 明示的に指定(念のため両方書くと確実)
    },
    watch: {
      usePolling: true,
      interval: 300,
    },
  },
})
