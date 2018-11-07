import { TestBed } from '@angular/core/testing';

import { CstService } from './cst.service';

describe('CstService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: CstService = TestBed.get(CstService);
    expect(service).toBeTruthy();
  });
});
