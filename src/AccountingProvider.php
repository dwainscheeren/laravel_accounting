<?php
namespace Dvb\Accounting;

interface AccountingProvider {
    public function getRelations(): array;
    public function getLedgers(): array;
    public function getMutations(MutationFilter $filter = null): array;
    public function addInvoice(array $work): string;
    public function addRelation(array $relation): array;
    public function updateRelation(array $relation): array;
}
