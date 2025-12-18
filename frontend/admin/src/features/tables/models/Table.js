export class Table {
  constructor(data = {}) {
    this.id = data.id ?? null;
    this.name = data.name ?? '';
    this.status = data.status ?? '';
  }
}
