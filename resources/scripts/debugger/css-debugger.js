let html = document.querySelector('html');
let body = document.querySelector('body');

export const grid = () => {
  let elems = document.querySelectorAll('.l-row');

  elems.forEach(elem => {
    let row, col;
    let gap, cols, colMargin;
    elem.addEventListener('mouseover', () => {
      let debuggerRow = document.querySelectorAll('.debugger-row');
      debuggerRow.forEach(el => {
        el.remove();
      })
      let posX = `${elem.getBoundingClientRect().left}px`;
      let posY = `${elem.getBoundingClientRect().top + document.documentElement.scrollTop}px`;
      let height = `${parseInt(getComputedStyle(elem).height)}px`;
      let width = `${parseInt(getComputedStyle(elem).width)}px`;
      
      gap = 'clamp(1rem, -0.19rem + 6vw, 9rem)';
      colMargin = 'calc(clamp(1rem, -0.19rem + 6vw, 9rem)/2)';
      cols = 12;
      
      row = document.createElement('div');
      row.classList.add('debugger-row');
      
      for (let i = 0; i < cols; i++) {
        col = document.createElement('div');
        col.classList.add('debugger-col');
        row.appendChild(col);
      }
      
      html.appendChild(row);
      row.style.setProperty('--height', height);
      row.style.setProperty('--width', width);
      row.style.setProperty('--pos-x', posX);
      row.style.setProperty('--pos-y', posY);
      row.style.setProperty('--gap', gap);
      row.style.setProperty('--col-mar', colMargin);   
    })
  });    
}

export const inspect = () => {
  document.body.addEventListener('mousemove', e => {
    let posX = `${e.target.getBoundingClientRect().left}px`;
    let posY = `${e.target.getBoundingClientRect().top + document.documentElement.scrollTop}px`;
    let height = `${parseInt(getComputedStyle(e.target).height)}px`;
    let width = `${parseInt(getComputedStyle(e.target).width)}px`;
    let padLeft = `${parseInt(getComputedStyle(e.target).paddingLeft)}px`;
    let padRight = `${parseInt(getComputedStyle(e.target).paddingRight)}px`;
    let padTop = `${parseInt(getComputedStyle(e.target).paddingTop)}px`;
    let padBtm = `${parseInt(getComputedStyle(e.target).paddingBottom)}px`;
    let marLeft = `${parseInt(getComputedStyle(e.target).marginLeft)}px`;
    let marRight = `${parseInt(getComputedStyle(e.target).marginRight)}px`;
    let marTop = `${parseInt(getComputedStyle(e.target).marginTop)}px`;
    let marBtm = `${parseInt(getComputedStyle(e.target).marginBottom)}px`;

    let debuggerRow = document.querySelectorAll('.debugger-padding');
    let debuggerMar = document.querySelectorAll('.debugger-margin');
    if (debuggerRow.length != 0) {
      debuggerRow.forEach(el => {
        el.style.setProperty('--height', height);
        el.style.setProperty('--width', width);
        el.style.setProperty('--pos-x', posX);
        el.style.setProperty('--pos-y', posY);
        el.style.setProperty('--pad-top', padTop);
        el.style.setProperty('--pad-right', padRight);
        el.style.setProperty('--pad-btm', padBtm);
        el.style.setProperty('--pad-left', padLeft);
      })
    } else {
      let padDiv = document.createElement('div');
      padDiv.classList.add('debugger-padding');
  
      html.appendChild(padDiv);
  
      padDiv.style.setProperty('--height', height);
      padDiv.style.setProperty('--width', width);
      padDiv.style.setProperty('--pos-x', posX);
      padDiv.style.setProperty('--pos-y', posY);
      padDiv.style.setProperty('--pad-top', padTop);
      padDiv.style.setProperty('--pad-right', padRight);
      padDiv.style.setProperty('--pad-btm', padBtm);
      padDiv.style.setProperty('--pad-left', padLeft);
    }

    if (debuggerMar.length != 0) {
      debuggerMar.forEach(el => {
        el.style.setProperty('--height', `calc(${height} + ${padTop} + ${padBtm} + ${marTop} + ${marBtm})`);
        el.style.setProperty('--width', `calc(${width} + ${padLeft} + ${padRight} + ${marLeft} + ${marRight})`);
        el.style.setProperty('--pos-x', `calc(${posX} - (${marLeft} + ${marRight}))`);
        el.style.setProperty('--pos-y', `calc(${posY} - (${marTop} + ${marBtm}))`);
        el.style.setProperty('--pad-top', marTop);
        el.style.setProperty('--pad-right', marRight);
        el.style.setProperty('--pad-btm', marBtm);
        el.style.setProperty('--pad-left', marLeft);
      })
    } else {
      let marDiv = document.createElement('div');
      marDiv.classList.add('debugger-margin');

      html.appendChild(marDiv);
  
      marDiv.style.setProperty('--height', `calc(${height} + ${padTop} + ${padBtm} + ${marTop} + ${marBtm})`);
      marDiv.style.setProperty('--width', `calc(${width} + ${padLeft} + ${padRight} + ${marLeft} + ${marRight})`);
      marDiv.style.setProperty('--pos-x', `calc(${posX} - (${marLeft} + ${marRight}))`);
      marDiv.style.setProperty('--pos-y', `calc(${posY} - (${marTop} + ${marBtm}))`);
      marDiv.style.setProperty('--pad-top', marTop);
      marDiv.style.setProperty('--pad-right', marRight);
      marDiv.style.setProperty('--pad-btm', marBtm);
      marDiv.style.setProperty('--pad-left', marLeft);
    }
  })
}

export const cssDebugger = () => {
  let section, container, row, col, colNo, innerCol, toggleBtn;
  colNo = 12;

  // Creating main section
  section = document.createElement('section');
  section.classList.add('debugger-grid');

  // Creating toggle button
  toggleBtn = document.createElement('button');
  toggleBtn.classList.add('debugger-grid__toggler');
  toggleBtn.innerText = 'Toggle grid';

  toggleBtn.addEventListener('click', () => {
    section.classList.toggle('debugger-grid--active');
  })

  // Creating grid
  container = document.createElement('div');
  container.classList.add('l-container');

  row = document.createElement('div');
  row.classList.add('l-row');

  for (let i = 1; i <= colNo; i++) {
    col = document.createElement('div');
    col.classList.add('l-col-1');

    innerCol = document.createElement('div');
    innerCol.classList.add('debugger-grid__inner-col');

    col.appendChild(innerCol);
    row.appendChild(col);
  }

  container.appendChild(row);
  section.appendChild(toggleBtn);
  section.appendChild(container);

  body.appendChild(section);
}
