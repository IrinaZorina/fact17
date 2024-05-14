const tooltipTemplate = (text) => {
    return `<div class="tooltip-container" style="position: relative;">
        <span class="tooltip">${text}</span>
  </div>`;
};

const tooltipShow = (container, text) => {
    container.insertAdjacentHTML(`beforeend`, tooltipTemplate(text));
    let tooltipContainer = container.querySelector(`.tooltip-container`);
    let tooltip = tooltipContainer.querySelector(`.tooltip`);
    setTimeout(() => {
        tooltip.classList.add('tooltip--active');
    }, 10);

    setTimeout(() => {
        tooltip.classList.remove('tooltip--active');
    }, 1000);

    setTimeout(() => {
        tooltipContainer.remove();
        tooltipContainer = null;
        tooltip = null;
    }, 1200);
}

const copyClipboard = () => {
    const copyBlocks = document.querySelectorAll(`.js-text-copy`);

    if (copyBlocks) {
        copyBlocks.forEach((copyBlock) => {
            const copyButton = copyBlock.querySelector(`.copy-button`);
            const text = copyBlock.querySelector(`.js-copy-frame`);

            const copyText = (button, text) => {
                button.addEventListener(`click`, () => {
                    const range = document.createRange();
                    range.selectNode(text);
                    window.getSelection().addRange(range);
                    try {
                        const success = document.execCommand(`copy`);
                        if (!copyBlock.querySelector('.tooltip-container') && success === true) {
                            tooltipShow(copyBlock, `Скопированно`);
                        }
                    } catch(err) {
                        tooltipShow(copyBlock, `Не удалось скопировать`);
                    }
                    window.getSelection().removeAllRanges();
                });
            };

            if (copyButton && text) {
                copyText(copyButton, text);
            }
        });
    }
}

const overlay = document.querySelector('.overlay');

const overlayShowHide = () => {
    const body = document.querySelector('body');

    if (overlay.classList.contains('overlay--show')) {
        overlay.classList.remove('overlay--show');
        overlay.style.top = null;
        body.classList.remove('noscroll');
    } else {
        overlay.classList.add('overlay--show');
        overlay.style.top = window.pageYOffset + `px`;
        body.classList.add('noscroll');
    }
}

const navToggle = () => {
    const navOpenButton = document.querySelector(`.nav__button`);
    const navCloseButton = document.querySelector(`.nav-list__button`);
    const navList = document.querySelector(`.nav-list`);
    const classChanger = () => {
        if (document.body.clientWidth > 768) {
            return;
        }

        if (navList.classList.contains(`nav-list--active`)) {
            navList.classList.remove(`opacity-1`);
            overlayShowHide();
            setTimeout(() => {
                navList.classList.remove(`nav-list--active`);
            }, 200);
        } else {
            navList.classList.add(`nav-list--active`);
            overlayShowHide();
            setTimeout(() => {
                navList.classList.add(`opacity-1`);
            }, 10);
        }
    }

    navOpenButton.addEventListener(`click`, () => {
        classChanger();
    });

    navCloseButton.addEventListener(`click`, () => {
        classChanger();
    });

    navList.addEventListener(`click`, (evt) => {
        if (evt.target.tagName === `A` || evt.target.tagName === `Li`) {
            classChanger();
        }
    });

    overlay.addEventListener(`click`, () => {
        classChanger();
    });
}

window.addEventListener("DOMContentLoaded", () => {
    copyClipboard();
    navToggle();
});
