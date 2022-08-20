<style>
a.ripple, div.ripple {
  overflow: hidden!important;
  position: relative;
}

a.ripple div.ripple, div.ripple div.ripple {
  z-index: 0;
  background-color: rgba(255, 255, 255, 0.9);
  position: absolute;
  transform: scale(0);
  pointer-events: none;
  animation: ripple 0.6s linear;
  -moz-animation: ripple 0.9s linear;
}
@keyframes ripple {
  from {
    transform: scale(0.0);
    opacity: 1;
  }
  to {
    transform: scale(2.5);
    opacity: 0;
  }
}
</style>