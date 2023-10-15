import './bootstrap';
import './main';

Sentry.init({
    dsn: import.meta.env.VITE_SENTRY_DSN_PUBLIC,
});
