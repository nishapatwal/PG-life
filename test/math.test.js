// test/math.test.js
console.log("MATH EXPORT:", require('../lib/math'));
const { expect } = require('chai');
const { add, mul } = require('../lib/math');  // relative path to lib/math.js

describe('Math Tests', () => {
  it('should add numbers correctly', () => {
    expect(add(2, 3)).to.equal(5);
  });

  it('should multiply numbers correctly', () => {
    expect(mul(2, 3)).to.equal(6);
  });
});
